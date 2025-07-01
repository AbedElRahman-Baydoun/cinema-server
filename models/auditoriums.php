<?php
require_once("Model.php");

class Auditorium extends Model {

    protected static string $table = "auditoriums";

    protected ?int $id = null;
    protected string $name;
    protected ?int $total_seats = null;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->total_seats = $data['total_seats'] ?? null;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getTotalSeats(): ?int {
        return $this->total_seats;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setTotalSeats(?int $total_seats): void {
        $this->total_seats = $total_seats;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'total_seats' => $this->total_seats
        ];
    }
}