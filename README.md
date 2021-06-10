# Plugin

Plugin feito como parte de requisito para vaga de desenvolvedor laravel

## Installation

Use o instalador de pacotes [composer](https://getcomposer.org/) para instalar o pacote plugin.

```bash
composer require ronannc/plugin_lumen
```
Instale tambem o pagote guzzle.

```bash
composer require guzzlehttp/guzzle
```

## Usage
Para uma instalação [Lumen](https://lumen.laravel.com/):

No arquivo bootstrap/app.php, descomente a linha:
```python
$app->withFacades();
```
Na parte de Register Service Providers, cole a linha:

```python
$app->register(\Ronannc\PluginLumen\PluginServiceProvider::class);
```
E na parte de Register Config Files, cole a linha:
```python
$app->configure('plugin_lumen');
```

Insira no seu .env as credenciais de acesso (CLIENT_CODE, CLIENT_KEY e BASE_URI)

```python
CLIENT_KEY=<sua key>
CLIENT_CODE=<seu code>
BASE_URI=<uri de sua api>
```
Pronto, plugin esta pronto para ser usado.

A rota /plots-sale retorna o resultado da requisição em <base_uri>/vendas. Voce pode passar parametros na rota para serem usados como filtros na requisição. Ex: /plots-sale?per_page=2.

## License
[MIT](https://choosealicense.com/licenses/mit/)
