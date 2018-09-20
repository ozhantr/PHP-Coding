<?php

/**
 * Binary Search Implementation.
 *
 * @author Ozhan Duran <ozhantr@hotmail.com>
 */
class BinarySearch
{
    private $key;
    private $array;
    private $log = [];

    public function setArray(array $array)
    {
        $this->array = $array;

        return $this;
    }

    public function setKey(int $key)
    {
        $this->setLog('Search for: ' . $key);
        $this->key = $key;

        return $this;
    }

    public function search(int $start = 0, int $end = null)
    {
        if (null === $end) {
            $end = count($this->array) - 1;
        }

        if ($start > $end) {
            $this->setLog('Middle: ' . $middle . ', Last Position: ' . $start . ',' . $end);
            $this->setLog('Result Index: Could not find!');

            return false;
        }

        $middle = (int) floor(($start + $end) / 2);

        if ($this->array[$middle] == $this->key) {
            $this->setLog('Middle: ' . $middle . ', Last Position: ' . $start . ',' . $end);
            $this->setLog('Result Index: ' . $middle);

            return $middle;
        }

        if ($this->key < $this->array[$middle]) {
            $this->setLog('Middle: ' . $middle . ', Cursor: left,' . ' Position: ' . $start . ',' . $end);

            return $this->search($start, --$middle);
        }

        $this->setLog('Middle: ' . $middle . ', Cursor: right,' . ' Position: ' . $start . ',' . $end);

        return $this->search(++$middle, $end);
    }

    public function getLog()
    {
        return $this->log;
    }

    private function setLog(string $log)
    {
        $this->log[] = $log;
    }
}

$array = range(10, 500);
$key = 35;

$bs = new BinarySearch();
$bs->setArray($array)->setKey($key)->search();

echo '<ol>' . PHP_EOL;
foreach ($bs->getLog() as $value) {
    echo '<li>' . $value . PHP_EOL;
}
echo '</ol>' . PHP_EOL;
