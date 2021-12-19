const mysql = require('mysql2');

const pool = mysql.createPool({
    host: 'localhost',
    user: 'root',
    database: 'blog',
    password: 'password'
});

module.exports = pool;