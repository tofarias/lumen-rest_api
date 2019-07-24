```json
{
	"info": {
		"_postman_id": "2b5eb752-5f45-4067-8bbf-4265e17b06b9",
		"name": "Lumen",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json"
	},
	"item": [
		{
			"name": "Usuario",
			"item": [
				{
					"name": "usuario: buscar todos",
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Content-Type",
								"value": "application/x-www-form-urlencoded"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "usuario",
									"value": "user01",
									"type": "text"
								},
								{
									"key": "email",
									"value": "user01@email.com",
									"type": "text"
								},
								{
									"key": "password",
									"value": "123456",
									"type": "text"
								},
								{
									"key": "verificado",
									"value": "0",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://localhost:8000/usuarios",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8000",
							"path": [
								"usuarios"
							]
						}
					},
					"response": []
				},
				{
					"name": "usuario: buscar pelo id",
					"request": {
						"method": "GET",
						"header": [
							{
								"key": "Content-Type",
								"value": "application/x-www-form-urlencoded"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "usuario",
									"value": "user01",
									"type": "text"
								},
								{
									"key": "email",
									"value": "user01@email.com",
									"type": "text"
								},
								{
									"key": "password",
									"value": "123456",
									"type": "text"
								},
								{
									"key": "verificado",
									"value": "0",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://localhost:8000/usuario/2",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8000",
							"path": [
								"usuario",
								"2"
							]
						}
					},
					"response": []
				},
				{
					"name": "usuario: cadastrar",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Content-Type",
								"value": "application/x-www-form-urlencoded"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "usuario",
									"value": "user01",
									"type": "text"
								},
								{
									"key": "email",
									"value": "user01215@email.com",
									"type": "text"
								},
								{
									"key": "password",
									"value": "123456",
									"type": "text"
								},
								{
									"key": "verificado",
									"value": "0",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://localhost:8000/usuario/cadastrar",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8000",
							"path": [
								"usuario",
								"cadastrar"
							]
						}
					},
					"response": []
				},
				{
					"name": "usuario: deletar",
					"request": {
						"method": "DELETE",
						"header": [
							{
								"key": "Content-Type",
								"value": "application/x-www-form-urlencoded"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "usuario",
									"value": "user666 atualizado",
									"type": "text"
								},
								{
									"key": "email",
									"value": "user666@email.com",
									"type": "text"
								},
								{
									"key": "password",
									"value": "123456",
									"type": "text"
								},
								{
									"key": "verificado",
									"value": "0",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://localhost:8000/usuario/3/deletar",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8000",
							"path": [
								"usuario",
								"3",
								"deletar"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "Auth",
			"item": [
				{
					"name": "auth: login",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Content-Type",
								"value": "application/x-www-form-urlencoded"
							}
						],
						"body": {
							"mode": "urlencoded",
							"urlencoded": [
								{
									"key": "email",
									"value": "user01012@email.com",
									"type": "text"
								},
								{
									"key": "password",
									"value": "123456",
									"type": "text"
								}
							]
						},
						"url": {
							"raw": "http://localhost:8000/login",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8000",
							"path": [
								"login"
							]
						}
					},
					"response": []
				}
			]
		}
	]
}
```