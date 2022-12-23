<?php
class Date
{
    private int $day;
    private int $month;
    private int $year;

    public function __construct(int $day, int $month, int $year, int $date = 0)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
        $this->date = "$this->day.$this->month.$this->year";
    }
    public function diffDate(Date $date): int
    {
        $date_one = strtotime($this->date);
        $date_two = strtotime($date->date);
        $numberOfDay = abs($date_one - $date_two) / 86400;

        return $numberOfDay;
    }

    public function minusDay(int $day): string
    {
        $dayMinus = strtotime($this->date . "-$day day");
        $thisDay = date('d.m.Y', $dayMinus);

        return $thisDay;
    }
    public function getDateOfWeek(): string
    {
        $dateOfWeek = strtotime($this->date);
        $thisDayOfTheWeek = date('l', $dateOfWeek);

        return $thisDayOfTheWeek;
    }

    public function format(string $format): string
    {
        $ruDateFormat = "$this->day.$this->month.$this->year";
        $enDateFormat = "$this->year-$this->month-$this->day";

        if ($format === "ru") {
            return $ruDateFormat;
        }
        if ($format === "en") {
            return $enDateFormat;
        }
    }
}

$date = new Date(1, 2, 2000);
$date2 = new Date(28, 10, 2002);
echo $date->diffDate($date2) . PHP_EOL;
echo $date->minusDay(32) . PHP_EOL;
echo $date->getDateOfWeek() . PHP_EOL;
echo $date->format('ru') . PHP_EOL;
echo $date->format('en') . PHP_EOL;
