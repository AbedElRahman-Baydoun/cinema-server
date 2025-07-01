<?php
require_once("model.php");

class Film extends Model {

    protected static string $table = "films";

    protected ?int $id = null;
    protected string $title;
    protected ?string $description = null;
    protected ?string $rating = null;
    protected ?string $trailer_url = null;
    protected ?string $start_date = null;
    protected ?string $end_date = null;

    public function __construct(array $data = []) {
        $this->id = $data['id'] ?? null;
        $this->title = $data['title'] ?? '';
        $this->description = $data['description'] ?? null;
        $this->rating = $data['rating'] ?? null;
        $this->trailer_url = $data['trailer_url'] ?? null;
        $this->start_date = $data['start_date'] ?? null;
        $this->end_date = $data['end_date'] ?? null;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function getRating(): ?string {
        return $this->rating;
    }

    public function getTrailerUrl(): ?string {
        return $this->trailer_url;
    }

    public function getStartDate(): ?string {
        return $this->start_date;
    }

    public function getEndDate(): ?string {
        return $this->end_date;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setDescription(?string $description): void {
        $this->description = $description;
    }

    public function setRating(?string $rating): void {
        $this->rating = $rating;
    }

    public function setTrailerUrl(?string $trailer_url): void {
        $this->trailer_url = $trailer_url;
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
            'title' => $this->title,
            'description' => $this->description,
            'rating' => $this->rating,
            'trailer_url' => $this->trailer_url,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date
        ];
    }
}
