<?php
abstract class Vehicle {
    protected $custom;

    public function __construct($custom) {
        $this->custom = $custom;
    }

    public function moveForward() {
        echo "Едем вперёд";
    }

    public function moveBackward() {
        echo "Едем назад";
    }

    public function honk() {
        echo "Бип!";
    }

    public function useWipers() {
        echo "Активация дворников";
    }
}

interface SpecialAbility {
    public function useSpecialAbility();
}

class Car extends Vehicle implements SpecialAbility {
    public function useSpecialAbility() {
        echo "Закись азота";
    }
}

class Bulldozer extends Vehicle implements SpecialAbility {
    public function useSpecialAbility() {
        echo "Управляем ковшом";
    }
}

function operateVehicle(Vehicle $vehicle) {
    $vehicle->moveForward();
    $vehicle->honk();
    $vehicle->useWipers();
    $vehicle->useSpecialAbility();

    echo "Индивидуализм: {$vehicle->custom}";
}

$car = new Car("Кожаный салон");
$bulldozer = new Bulldozer("Металлический салон");
?>
