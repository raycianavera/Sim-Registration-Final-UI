const express = require('express');
const bodyParser = require('body-parser')
const mysql = require('mysql')

const app = express()
const port = process.env.PORT || 5000

app.use(bodyParser.urlencoded({ extended: false}))

app.use(bodyParser.json())

// MySQL 
const pool = mysql.createPool({
    connectionlimit : 10,
    host            : 'localhost',
    user            : 'root',
    password        : '',
    database        : 'simnumbers'

})

//Get 
app.get('',(req, res) => {

    pool.getConnection((error, connection) => {
        if (error) throw error
        console.log(`connected as id ${connection.threadId}`)

        //queary(sqlString, callback)

        connection.query('SELECT * FROM `numbers` WHERE = `numbers`=' +639202303444, (error, rows) => {
            connection.release() // return the connection to pool

            if(!error) {
                res.send(rows)
            }else {
                console.log(error)
            }

        })
    })
})












// Listen on environment port or 5000
app.listen(port, () => console.log(`Listen on port ${port}`))