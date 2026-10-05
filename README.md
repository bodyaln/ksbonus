# E-shop – meranie metrík v PHP

Jednoduchý e-shop na nepovinnú úlohu: košík s produktmi, objednávka so zľavami a výpis faktúry.

## Triedy

| Trieda | Čo robí |
|---|---|
| `Product` → `DigitalProduct` → `Ebook` | produkty, reťazec dedičnosti s 3 úrovňami |
| `Customer` | zákazník a jeho typ (`regular`, `student`, `vip`) |
| `Cart` | košík, súčet cien |
| `Order` | objednávka, `calculateDiscount()` počíta zľavu podľa sumy, promo kódu, typu zákazníka a e-kníh |
| `InvoicePrinter` | výpis faktúry |
| `Shop` | spustí celý príklad, používa všetky ostatné triedy |

## Spustenie

```bash
php index.php
```

## Meranie metrík (PhpMetrics)

```bash
composer install
vendor/bin/phpmetrics --report-html=report src
open report/index.html
```

Hotový report je už v priečinku `report/`.
