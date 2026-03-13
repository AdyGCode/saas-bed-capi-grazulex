# Contacts API


[![PHP Version](https://img.shields.io/badge/PHP-8.3%2B-blue)](https://php.net)
[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-red)](https://laravel.com)
[![License](https://img.shields.io/badge/License-MIT-green)](LICENSE)

## Features

- ...

## Requirements

- PHP 8.4+

## Quick Start



## API Documentation

Once running, access the auto-generated documentation:

- **Swagger UI**: [http://localhost:8080/docs/api](http://localhost:8080/docs/api)
- **OpenAPI JSON**: [http://localhost:8080/docs/api.json](http://localhost:8080/docs/api.json)

## Authentication

## Database Structure

<iframe width="560" height="315" src="https://dbdiagram.io/d/contacts-api-69b37f7e84de9dc380117598" title="DB Structure ERD"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

```dbml

Table users {
  id integer [primary key]
  given_name varchar(64) [not null]
  family_name varchar(64) [null]
  nickname varchar(128) [null]
  email varchar(340) [not null, unique]
  password varchar [not null]
  created_at timestamp
  updated_at timestamp

  indexes {
    (email) [name: 'email_index']
  }
}

Table contacts {
  id integer [primary key]
  given_name varchar(64) [not null]
  family_name varchar(64) [null]
  nickname varchar(128) [null]
  user_id integer [not null, ref: > users.id]
  created_at timestamp
  updated_at timestamp

  indexes {
    (given_name, family_name) [name: 'fullname_gf_index']
    (family_name, given_name) [name: 'fullname_fg_index']
    (nickname) [name: 'nickname_index']
  }
}

Table details {
  id integer [primary key]
  contact_id integer [not null, ref: > contacts.id]
  details_type_id integer [not null, ref: > detail_types.id]
  title varchar(32)
  description text [note: 'detailed notes']
  created_at timestamp
  updated_at timestamp

  indexes {
    (contact_id) [name: 'contact_index']
    (contact_id, details_type_id) [name: 'contact_details_type_index']
  }
}

Table detail_types {
  id integer [primary key]
  title varchar(32) [not null, unique]
  description varchar [null]
  created_at timestamp
  updated_at timestamp

  indexes {
    (title) [name: 'title_index']
  }
}

Table groups{
  id integer [primary key]
  user_id integer [not null, ref: > users.id]
  title varchar(32) [not null, unique]
  description varchar [null]
  created_at timestamp
  updated_at timestamp

  indexes {
    (user_id) [name: 'user_index']
    (title) [name: 'title_index']
  }
}

Table contacts_groups{
  id integer [primary key]
  contact_id integer [ref: > contacts.id]
  group_id integer [ref: > groups.id]
  created_at timestamp
  updated_at timestamp

  indexes {
    (group_id, contact_id) [name: 'group_contact_index']
    (contact_id, group_id) [name: 'contact_group_index']
  }
}


```


## License

This project is open-sourced software licensed under the [MIT license](LICENSE).

## Credits

- [Laravel](https://laravel.com) - The PHP Framework
- [Laravel Sanctum](https://laravel.com/docs/sanctum) - API Token Authentication
- [grazulex/laravel-apiroute](https://github.com/Grazulex/laravel-apiroute) - API Versioning
- [spatie/laravel-query-builder](https://github.com/spatie/laravel-query-builder) - Query Building
- [spatie/laravel-data](https://github.com/spatie/laravel-data) - Data Transfer Objects
- [dedoc/scramble](https://github.com/dedoc/scramble) - API Documentation
- [grazulex/laravel-api-idempotency](https://github.com/Grazulex/laravel-api-idempotency) - API Idempotency (optional)
- [grazulex/laravel-api-throttle-smart](https://github.com/Grazulex/laravel-api-throttle-smart) - Smart Rate Limiting (optional)
- [Pest PHP](https://pestphp.com) - Testing Framework

## Support

- [Documentation](https://github.com/grazulex/laravel-api-kit/wiki)
- [Issues](https://github.com/grazulex/laravel-api-kit/issues)
- [Discussions](https://github.com/grazulex/laravel-api-kit/discussions)
