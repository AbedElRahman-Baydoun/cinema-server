<?php
require_once("Model.php");

class Seat extends Model {

    protected static string $table = "seats";

    protected ?int $id = null;
    protected string $row_label;
    protected int $column_number;
    protected bool $is_vip;
    protected int $auditorium_id;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->row_label = $data['row_label'] ?? '';
        $this->column_number = $data['column_number'] ?? 0;
        $this->is_vip = isset($data['is_vip']) ? (bool)$data['is_vip'] : false;
        $this->auditorium_id = $data['auditorium_id'];
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getRowLabel(): string {
        return $this->row_label;
    }

    public function getColumnNumber(): int {
        return $this->column_number;
    }

    public function isVip(): bool {
        return $this->is_vip;
    }

    public function getAuditoriumId(): int {
        return $this->auditorium_id;
    }

    public function setRowLabel(string $row_label): void {
        $this->row_label = $row_label;
    }

    public function setColumnNumber(int $column_number): void {
        $this->column_number = $column_number;
    }

    public function setIsVip(bool $is_vip): void {
        $this->is_vip = $is_vip;
    }

    public function setAuditoriumId(int $auditorium_id): void {
        $this->auditorium_id = $auditorium_id;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'row_label' => $this->row_label,
            'column_number' => $this->column_number,
            'is_vip' => $this->is_vip,
            'auditorium_id' => $this->auditorium_id
        ];
    }
}