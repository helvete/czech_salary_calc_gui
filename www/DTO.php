<?php

namespace helvete\WageCalcGui;

class DTO {
    private int $wage;
    private string $yearmonth;
    private float $untaxable = 0;
    private float $vacrate = 0;
    private float $vacutil = 0;
    private bool $debug = true;
    private float $ovetimehours = 0;
    private string $submit = "dummy holder";

    public static function fromArray(array $vals): self {
        $self = new self();
        foreach ($vals as $name => $val) {
            if (empty($val)) {
                if (self::mandatory($name)) {
                    throw new HorribleException(sprintf("Mandatory field %s", $name));
                }
                continue;
            }
            if (property_exists($self, $name)) {
                $self->$name = $val;
                continue;
            }
            throw new HorribleException(sprintf("Unknown payload key %s", $name));
        }

        return $self;
    }

    public function getBulk(): array {
        return array_values(get_object_vars($this));
    }

    private static function mandatory(string $name) {
        return in_array($name, ['wage', 'yearmonth'], true);
    }

    public function getWage(): int {
        return $this->wage;
    }

    public function getYearmonth(): string {
        return $this->yearmonth;
    }

    public function getYear(): string {
        try {
            return explode('-', $this->yearmonth)[0];
        } catch (\Throwable $x) {
            throw new HorribleException(sprintf(
                "Invalid input for yearmonth: %s",
                $this->yearmonth,
            ));
        }
    }
}
