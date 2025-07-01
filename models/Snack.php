<?php
require_once("Model.php");

class Snack extends Model {

    protected static string $table = "snacks";

    protected ?int $id = null;
    protected string $name;
    protected float $price;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->price = (float)($data['price'] ?? 0);
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price
        ];
    }
}