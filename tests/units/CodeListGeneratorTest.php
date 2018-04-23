<?php

use PHPUnit\Framework\TestCase;

class CodeListGeneratorTest extends TestCase
{
    /** @test */
    public function generateAll(): void
    {
        (new \AragornYang\Onix\CodeLists\CodeListGenerator())->generateAll();
        $this->assertTrue(true);
    }

    /** @test */
    public function generate_properly(): void
    {
        $content = (new \AragornYang\Onix\CodeLists\CodeListGenerator())->parseString(<<<TAG
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>ONIX Code List 22 [Issue 36]</title>
		<style type="text/css">
			body { font-family: Arial, Helvetica, sanserif }
			.listHeading { font-size: 16pt; font-weight: bold; margin-top: 12pt }
			.heading { text-align: left }
			.code { vertical-align: top }
		</style></head>
	<body>
		<div class="listHeading">ONIX Code Lists Issue 36, January 2017<br>List 22: Language &nbsp;&#8211; role,/- code</div>
		<table width="100%">
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr align="left">
				<th width="10%">Value</th>
				<th width="30%">Description</th>
				<th width="60%">Notes</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr valign="top">
				<td>01</td>
				<td>Desc01</td>
				<td>Notes01
				Notes01-2nd-line
				</td>
			</tr>
			<tr valign="top">
				<td>02</td>
				<td>Desc02</td>
				<td>Notes02</td>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
		</table>
	</body>
</html>
TAG
        );
        $expected = [
            'listNo' => '22',
            'listName' => 'LanguageRole',
            'contents' => [
                [
                    "01",
                    "Desc01",
                    "Notes01
				Notes01-2nd-line
				"
                ],
                ["02", "Desc02", "Notes02"]
            ]
        ];
        $this->assertSame($expected, $content);

        $content2 = (new \AragornYang\Onix\CodeLists\CodeListGenerator())->generateFromArray($expected);
        $expected2 = <<<PHP
<?php

namespace AragornYang\Onix\CodeLists;

class CodeList22LanguageRole extends CodeList
{
    public const KEY = 'LanguageRole';

    protected const MAPPING = [
        /* Notes01
				Notes01-2nd-line */
        "01" => "Desc01",
        // Notes02
        "02" => "Desc02",
    ];
}
PHP;
        $this->assertSame($expected2, $content2);
    }
}