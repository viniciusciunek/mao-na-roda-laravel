# Mão na Roda
---
O **Mão na Roda** é um sistema projetado para simplificar o gerenciamento de oficinas mecânicas. Ele oferece funcionalidades essenciais para controle de orçamentos, cotações, estoque e finanças, além de recursos adicionais previstos para facilitar a organização das tarefas de oficina.

### Funcionalidades Básicas
- [ ] **Ordem de Serviço**: Gerenciamento de serviços e pedidos.
- [ ] **Cadastro de Produtos e Clientes**: Registro rápido de informações essenciais.

### Funcionalidades Futuras
- [ ] **Controle de Estoque**
- [ ] **Controle Financeiro**
- [ ] **Entrada de peças via XML**
- [ ] **Dashboard de Indicadores**
- [ ] **Check-List Impresso**
- [ ] **NF de Produto e Serviço**
- [ ] **NFC-e (Cupom Fiscal)**

---

## Protótipos de Tela

Link para os protótipos de tela no Figma: [Protótipos Mão na Roda](https://www.figma.com/design/xMkDfyCfqBTDmqUxX4BtbJ/M%C3%A3o-na-Roda?node-id=0-1&t=dzKJAiyn0vuh20Bf-1)

---

## Modelagem do Banco

![image](https://github.com/user-attachments/assets/6492a164-a0c6-45ad-9d84-1bef2e615fe4)

---
## Executando o projeto

```
git clone https://github.com/viniciusciunek/mao-na-roda-laravel

cd mao-na-roda-laravel

cp .env.example .env

npm install && npm run build

composer install

docker compose up -d --build

composer run dev
```
