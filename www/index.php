<?php

namespace helvete\WageCalcGui;

use helvete\Tools\Holidays;
use helvete\Tools\WageCalc;

class index {

    public function run(): void {
        switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
             $this->generateForm();
             return;
        case 'POST':
             $this->submitForm();
             return;
        default:
            echo '{"result": "not implemented, bitch!"}';
            exit();
        }
    }

    private function generateForm(): void {
        include(__DIR__ . '/tpl.php');
    }

    private function submitForm(): void {
        try {
            $dto = DTO::fromArray($_POST);
            $bulkData = $dto->getBulk();
            $calc = new WageCalc(
                new Holidays($dto->getYear()),
                ...array_slice($bulkData, 2),
            );
            $calc->getDiff($dto->getWage(), $dto->getYearmonth());
            $data = $calc->getDebugStack();
            include(__DIR__ . '/tpl-result.php');
        } catch (\InvalidArgumentException | \HorribleException $h) {
            $this->fuckOff($h->getMessage());
        } catch (\Throwable $e) {
            //$this->fuckOff($e->getTraceAsString());
            $this->fuckOff("Unknown error, sorry");
        }
    }

    private function fuckOff(string $veryFriendlyMessage) {
        echo $veryFriendlyMessage;
        exit;
    }
}
require_once(__DIR__ . '/DTO.php');
require_once(__DIR__ . '/HorribleException.php');
require_once(__DIR__ . '/../vendor/helvete/wage-calc/src/Tools/WageCalc.php');
require_once(__DIR__ . '/../vendor/helvete/wage-calc/src/Tools/Holidays.php');
(new index())->run();
