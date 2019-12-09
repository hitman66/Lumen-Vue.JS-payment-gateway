# Lumen + Vue.js Project

Technologies used:
- [Vue.js 2](https://vuejs.org/)
- [Vue Router 2](https://router.vuejs.org/en/)
- [Mdbootstrap for Vue.js](https://mdbootstrap.com/)

Backend:

- [Lumen 5.8](https://lumen.laravel.com/)
- [Axios](https://github.com/axios/axios)
- [Vuex](https://vuex.vuejs.org/en/)
- [VueHttp](https://github.com/pagekit/vue-resource/)

## Quick Start

### Backend

```bash
cd api
composer install
# configure your key, database, etc in `.env` file
php artisan migrate --seed
php -S localhost:9000 -t public
# default login is test@test.com:test
```

### Frontend

```bash
cd frontend
yarn install # or npm install
yarn dev # or npm run dev
```

### What are the params you would need from your merchant and what response would you return back

For this system alone it only require few parts of it :_

- Order ID ( Shipname )
- Merchant ID ( Merchant ID )
- API-key ( Which I already had implemented beforehand )
- Total amount of payment
- Phone number
- Email

Supposed so that the requirement should be plentiful. Due to time constraints this would be an issue to implement it all.

- Merchant ID
- Merchant Name
- Private API key that will be given to them private for security reasons
- Total amount of payment
- Customer Name
- Customer credentials ( emails, address, etc )

There will be probably more but this is something that highly depending on each payment gateway provider themselves. And of course this doesn't reflect on this system at all due to trying to keep it basic.

The response that I should give would be :_

- Status ID that states that the information order has been given in.
- Token that identifies which order is coming from.

### Webhook Implementation - how do you plan to do this?

We give out the private url that basically works as a reference of each merchant/web owner that is willing to use the services. On top of that we will be giving out the API-key to ensure that the receiving data will always be the genuine one.

### Unit Testing

I'm using Laragon for windows which works well with lumen framework and vue.js framework. All things considered.

Also I'm using postmen to determine the API calls. Although the problem with postmen is that it doesn't reflect on how vue.js is approaching it ( CORS issues )

