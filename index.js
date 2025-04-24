const express = require('express');
const app = express();
const port = process.env.PORT || 3000;

app.get('/', (req, res) => {
  res.send('¡Hola, Railway! La aplicación está funcionando correctamente.');
});

app.get('/info', (req, res) => {
  res.json({
    status: 'online',
    message: 'Hello World API is running',
    timestamp: new Date(),
    environment: process.env.NODE_ENV || 'development'
  });
});

app.listen(port, () => {
  console.log(`Servidor iniciado en http://localhost:${port}`);
});
