<?

class TasteBuffet
{
     private array $tastes = [];

    public function add(Taste $taste): void
    {
        $this->tastes[] = $taste;
    }

    public function all(): array
    {
        return $this->tastes;
    }
}