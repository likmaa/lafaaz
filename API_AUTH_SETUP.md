# Documentation API - Laravel Sanctum Authentication

## Configuration terminée ✅

### Fichiers modifiés/créés :

1. **app/Http/Kernel.php** - Middleware Sanctum activé
2. **config/cors.php** - CORS configuré avec credentials
3. **config/sanctum.php** - Domaines stateful étendus (Vite)
4. **app/Http/Controllers/Api/AuthController.php** - Controller d'authentification
5. **app/Http/Resources/UserResource.php** - Resource pour formater les réponses
6. **routes/api.php** - Routes API configurées
7. **.env.sanctum** - Variables d'environnement à ajouter

---

## Routes API disponibles

### Routes publiques

#### Inscription
```http
POST /api/register
Content-Type: application/json

{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password123",
  "password_confirmation": "password123",
  "contact": "+229...",
  "adresse": "...",
  "ville": "...",
  "pays": "...",
  "lieu": "...",
  "birth": "1990-01-01",
  "profession": "..."
}

Response: 201 Created
{
  "user": {...},
  "access_token": "1|xyz...",
  "token_type": "Bearer"
}
```

#### Connexion
```http
POST /api/login
Content-Type: application/json

{
  "email": "john@example.com",
  "password": "password123"
}

Response: 200 OK
{
  "user": {...},
  "access_token": "2|abc...",
  "token_type": "Bearer"
}
```

---

### Routes protégées (nécessite authentification)

**Headers requis :**
```
Authorization: Bearer {access_token}
Accept: application/json
```

#### Obtenir l'utilisateur connecté
```http
GET /api/user
```

#### Mettre à jour le profil
```http
PUT /api/user/profile
Content-Type: application/json

{
  "name": "Jane Doe",
  "contact": "+229...",
  "ville": "Cotonou"
}
```

#### Changer le mot de passe
```http
PUT /api/user/password
Content-Type: application/json

{
  "current_password": "oldpassword",
  "password": "newpassword123",
  "password_confirmation": "newpassword123"
}
```

#### Déconnexion
```http
POST /api/logout
```

---

## Configuration .env

Ajoutez ces variables à votre fichier `.env` :

```env
FRONTEND_URL=http://localhost:3000
SANCTUM_STATEFUL_DOMAINS=localhost:3000,localhost:5173,127.0.0.1:3000,127.0.0.1:5173
SESSION_DRIVER=cookie
SESSION_DOMAIN=localhost
```

---

## Utilisation depuis React

### Installation des dépendances
```bash
npm install axios
```

### Configuration Axios (src/services/api.js)
```javascript
import axios from 'axios';

const api = axios.create({
  baseURL: 'http://localhost:8000/api',
  withCredentials: true,
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json',
  },
});

// Intercepteur pour ajouter le token
api.interceptors.request.use((config) => {
  const token = localStorage.getItem('auth_token');
  if (token) {
    config.headers.Authorization = `Bearer ${token}`;
  }
  return config;
});

export default api;
```

### Exemple d'utilisation
```javascript
import api from './services/api';

// Connexion
const login = async (email, password) => {
  const response = await api.post('/login', { email, password });
  localStorage.setItem('auth_token', response.data.access_token);
  return response.data.user;
};

// Inscription
const register = async (userData) => {
  const response = await api.post('/register', userData);
  localStorage.setItem('auth_token', response.data.access_token);
  return response.data.user;
};

// Récupérer l'utilisateur
const getUser = async () => {
  const response = await api.get('/user');
  return response.data;
};

// Déconnexion
const logout = async () => {
  await api.post('/logout');
  localStorage.removeItem('auth_token');
};
```

---

## Prochaines étapes

1. ✅ **Sanctum configuré**
2. ⏭️ Créer les API Resources pour les autres modèles (Projet, Actualité, etc.)
3. ⏭️ Créer les API Controllers pour les entités métier
4. ⏭️ Initialiser le projet React avec Vite + Tailwind
5. ⏭️ Implémenter l'authentification dans React

---

## Sécurité

- Les tokens sont stockés dans `personal_access_tokens`
- CORS configuré pour le frontend
- Credentials supportés (cookies)
- Protection CSRF pour les requêtes stateful
- Middleware `auth:sanctum` pour protéger les routes
