<?php
require_once("Model.php");

class Actor extends Model {

    protected static string $table = "actors";

    protected ?int $id = null;
    protected string $name;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? '';
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}