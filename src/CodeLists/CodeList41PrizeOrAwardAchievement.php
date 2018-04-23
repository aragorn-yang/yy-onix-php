<?php

namespace AragornYang\Onix\CodeLists;

class CodeList41PrizeOrAwardAchievement extends CodeList
{
    public const KEY = 'PrizeOrAwardAchievement';

    protected const MAPPING = [
        // 
        "01" => "Winner",
        // Named as being in second place
        "02" => "Runner-up",
        /* Cited as being worthy of special attention at the final stage of the judging process, but not named specifically as winner
					or runner-up. Possible terminology used by a particular prize includes ‘specially commended’ or ‘honored’ */
        "03" => "Commended",
        /* Title named by the judging process to be one of the final list of candidates, such as a ‘short-list’ from which the winner
					is selected, or a title named as ‘finalist’ */
        "04" => "Short-listed",
        /* Title named by the judging process to be one of the preliminary list of candidates, such as a ‘long-list’ from which first
					a shorter list or set of finalists is selected, and then the winner is announced */
        "05" => "Long-listed",
        // Or co-winner
        "06" => "Joint winner",
        /* Selected by judging panel or an official nominating process for final consideration for a prize, award or honour for which
					no ‘short-list’ or ‘long list’ exists */
        "07" => "Nominated",
    ];
}