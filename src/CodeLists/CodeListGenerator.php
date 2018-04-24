<?php

namespace AragornYang\Onix\CodeLists;

use AragornYang\Onix\Meta\Tag;

class CodeListGenerator
{
    public function generateAll(): void
    {
        if ($dh = opendir(__DIR__ . '/htm')) {
            while (($file = readdir($dh)) !== false) {
                if ($file !== '.' && $file !== '..') {
                    $xml = file_get_contents(__DIR__ . '/htm/' . $file);
                    $expected = $this->parseString($xml);
                    file_put_contents(__DIR__ . "/CodeList{$expected['listNo']}{$expected['listName']}.php",
                        $this->generateFromArray($expected));
                }
            }
            closedir($dh);
        }

    }

    public function generateFromString(string $htmlContent): void
    {
        $this->generateFromArray($this->parseString($htmlContent));
    }

    public function parseString(string $htmlContent): array
    {
        preg_match("/\<br\>List (\d+)\: (.+)\<\/div\>/", $htmlContent, $matches1);
        if (!($matches1[1] ?? null)) {
            var_dump($htmlContent);
            throw new \Exception();
        }
        $listNo = $matches1[1];
        $listName = $this->parseListName($matches1[2]);

        preg_match_all('/\<tr valign\="top"\>\s*\<td\>(.*)<\/td>\s*\<td\>(.*)\<\/td\>\s*\<td\>([\s\S]*)\<\/td\>\s*\<\/tr\>/U',
            $htmlContent, $matches2);
        $contents = [];
        foreach ($matches2[1] as $key => $value) {
            $contents[] = [$matches2[1][$key], $matches2[2][$key], $matches2[3][$key]];
        }
        return compact('listNo', 'listName', 'contents');
    }

    private function parseListName(string $original): string
    {
        $original = str_replace(['/', '-', ',', '(', ')'], ' ', $original);
        //remove html entities
        $original = preg_replace(["/&#\d+;/", "/&\w{4,6};/"], '', $original);
        $return = '';
        $words = explode(' ', $original);
        $hasTrailingCodeWord = false;
        if ($words[\count($words) - 1] === 'code') {
            $hasTrailingCodeWord = true;
            array_pop($words);
        }
        foreach ($words as $word) {
            $return .= ucfirst($word);
        }
        if ($hasTrailingCodeWord) {
            if (Tag::isValid($return . 'Code')) {
                return $return . 'Code';
            }
        }
        return $return;
    }

    public function generateFromArray(array $expected): string
    {
        $mapping = "";
        foreach ($expected['contents'] as [$value, $desc, $notes]) {
            $desc = html_entity_decode($desc);
            $notes = trim(html_entity_decode($notes));
            if (stripos($notes, "\n") !== false) {
                $mapping .= <<<MAPPING
        /* {$notes} */
        "{$value}" => "{$desc}",

MAPPING;
            } else {
                $mapping .= <<<MAPPING
        // {$notes}
        "{$value}" => "{$desc}",

MAPPING;
            }

        }
        return <<<PHP
<?php

namespace AragornYang\Onix\CodeLists;

class CodeList{$expected['listNo']}{$expected['listName']} extends CodeList
{
    public const KEY = '{$expected['listName']}';

    protected const MAPPING = [
{$mapping}    ];
}
PHP;
    }
}