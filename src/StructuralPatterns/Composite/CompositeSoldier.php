<?php


namespace Lcarr\DesignPatterns\StructuralPatterns\Composite;


class CompositeSoldier implements Soldier
{
    private array $soldiers = [];

    public function add(Soldier $soldier): void
    {
        $rank = get_class($soldier);

        $this->soldiers[] = $soldier;
    }

    public function remove(string $rank): void
    {
        foreach ($this->soldiers as $position => $soldier) {
            if ($soldier->getRole() === $rank) {
                unset($this->soldiers[$position]);
                return;
            }
        }
    }

    public function getSoldiers(): array
    {
        return $this->soldiers;
    }

    public function march(): void
    {
        foreach ($this->soldiers as $soldier) {
            $soldier->march();
        }
    }
}
