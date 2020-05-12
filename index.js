const express = require('express');
const app = express();
const cors = require('cors');
// const fs = require('fs')

app.use(cors());

app.get('/', (req,res)=> {
    res.sendfile('index.html')
})

app.listen(3333);