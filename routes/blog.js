const express = require('express');

const db = require('../data/database');

const router = express.Router();

router.get('/', function (req, res) {
    res.redirect('/posts');
});

router.get('/posts', async function (req, res) {
    const query = `
    SELECT posts.*, authors.name 
    AS author_name FROM posts 
    INNER JOIN authors 
    ON posts.author_id = authors.id`;

    const [posts] = await db.query(query);
    res.render('posts-list', {
        posts: posts
    });
});

router.get('/new-post', async function (req, res) {
    const [authors] = await db.query('SELECT * FROM authors');
    res.render('create-post', {
        authors: authors
    });
});

router.post('/posts', async (req, res) => {
    const data = [
        req.body.title,
        req.body.summary,
        req.body.content,
        req.body.author
    ];

    await db.query('INSERT INTO posts (title, summary, body, author_id) VALUES (?)', [data]);
    res.redirect('/posts');
});

router.get('/posts/:id', async (req, res) => {
    const query = `
    SELECT posts.*, authors.name as author_name, authors.email as author_email FROM posts 
    INNER JOIN authors ON posts.author_id = authors.id
    WHERE posts.id = ?
    `;

    const [postInfo] = await db.query(query, [req.params.id]);

    if (!postInfo || postInfo.length === 0) {
        return res.status(404).render('404');
    }

    res.render('post-detail', {
        post: postInfo[0]
    });
});

module.exports = router;