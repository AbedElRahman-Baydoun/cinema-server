<?php
require_once("Model.php");

class Showtime extends Model {

    protected static string $table = "showtimes";

    protected ?int $id = null;
    protected int $film_id;
    protected int $auditorium_id;
    protected string $show_datetime;
    protected ?string $start_date = null;
    protected ?string $end_date = null;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->film_id = $data['film_id'];
        $this->auditorium_id = $data['auditorium_id'];
        $this->show_datetime = $data['show_datetime'];
        $this->start_date = $data['start_date'] ?? null;
        $this->end_date = $data['end_date'] ?? null;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getFilmId(): int {
        return $this->film_id;
    }

    public function getAuditoriumId(): int {
        return $this->auditorium_id;
    }

    public function getShowDatetime(): string {
        return $this->show_datetime;
    }

    public function getStartDate(): ?string {
        return $this->start_date;
    }

    public function getEndDate(): ?string {
        return $this->end_date;
    }

    public function setFilmId(int $film_id): void {
        $this->film_id = $film_id;
    }

    public function setAuditoriumId(int $auditorium_id): void {
        $this->auditorium_id = $auditorium_id;
    }

    public function setShowDatetime(string $datetime): void {
        $this->show_datetime = $datetime;
    }

    public function setStartDate(?string $start_date): void {
        $this->start_date = $start_date;
    }

    public function setEndDate(?string $end_date): void {
        $this->end_date = $end_date;
    }

    public function toDB(): array {
        return [
            'id' => $this->id,
            'film_id' => $this->film_id,
            'auditorium_id' => $this->auditorium_id,
            'show_datetime' => $this->show_datetime,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date
        ];
    }
}