# FOQS

FOQSは、モダンなWeb開発の手法を取り入れたプロジェクトです。フロントエンドはNext.js（TypeScript）を使用し、バックエンドはLaravelを使用して構築されています。開発にあたって、コードの品質を担保するため、LinterやFormatterを使用しています。

## 開発手順

### フロントエンド (Next.js)

#### 1. コードの実装
Next.js (TypeScript) を使用してコードを実装します。

#### 2. コードの整形
ESLintとPrettierを使用してコードの品質を確保します。  
フロントエンドのルートディレクトリ (`FOQS/frontend`) で以下のコマンドを実行してコードを整形します。

```sh
npm run format
```


#### 3. コミット前の確認
コードが整形されていることを確認した後、リポジトリにコミットします。

### バックエンド (Laravel)

#### 1. コードの実装
Laravelを使用してコードを実装します。

#### 2. コードの整形
PHP-CS-Fixerを使用してコードの品質を確保します。  
バックエンドのルートディレクトリ (`FOQS/laravel-project`) で以下のコマンドを実行してコードを整形します。

```sh
docker compose exec app ./vendor/bin/php-cs-fixer fix
```


#### 3. コミット前の確認
コードが整形されていることを確認した後、リポジトリにコミットします。

## 注意事項

- コードの整形はコミット前に行うことを強く推奨します。これによりコードの一貫性が保たれ、レビューが容易になります。
- 2023年現在のベストプラクティスに従って開発を行うことが推奨されます。

開発を進めるにあたって、コードの品質と一貫性を保つことが重要です。これらの手順に従ってください。
