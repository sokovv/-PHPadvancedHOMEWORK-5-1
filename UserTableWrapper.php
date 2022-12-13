<?php


class UserTableWrapper implements TableWrapperInterface
{
    public array $rows;

    /**
     * @param array|$values [column => row_value] $values
     */
    public function insert(array $values): void
    {
        $this->rows[] = $values;
    }

    public function update(int $id, array $values): array
    {
        foreach ($this->rows as $i => $iValue) {
            if ($iValue['id'] === $id) {
                $this->rows[$i] = $values;
            }
        }
        return $this->rows;
    }

    public function delete(int $id): void
    {
        foreach ($this->rows as $i => $iValue) {
            if ($iValue['id'] === $id) {
                unset($this->rows[$i]);
            }
        }
    }

    public function get(): array
    {
        return $this->rows;
    }
}
