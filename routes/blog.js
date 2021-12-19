const express = require('express');

const db = require('../data/database');

const router = express.Router();

router.get('/', function (req, res) {
    res.redirect('/posts');
});

router.get('/posts', function (req, res) {
    res.render('posts-list');
});

router.get('/new-post', function (req, res) {
    db.query();
    res.render('create-post');
});

module.exports = router;