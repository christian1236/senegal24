const express = require('express')
const bodyParse = require('body-parser')
const xml = require('xml')
const app = express()
app.use(bodyParse.urlencoded({ extended: false }));
app.use(express.json())

const port = 9001
const dbConn = require('./config/db.config')
app.get('/articles',(req,res)=>{
    
    
    const typeXml =req.query
    let sql ='SELECT * FROM article';
    let query = dbConn.query(sql,(err,results)=>{
        if(err) throw err
        if(typeXml.type==='xml'){
            res.set('Content-Type', 'text/xml')
            
            
            res.send(xml(results,true));
        }else{
            res.send(results)
        }
        
    })
    
})
app.get('/articles/categories',(req,res)=>{
    const typeXmlJson =req.query
    let sql ='SELECT * FROM article GROUP BY categorie';
    let query = dbConn.query(sql,(err,results)=>{
        if(err) throw err
        if(typeXmlJson.type==='xml'){
            res.set('Content-type', 'text/xml')
            res.send(xml(results,true))
        }else{
            res.send(results)
        }
        
    })
    
})
app.get('/articles/:categorie',(req,res)=>{
    
    const typeXmlJson =req.query
    let sql =`SELECT * FROM article where categorie = ${req.params.categorie}`;
    let query = dbConn.query(sql,(err,results)=>{
        if(err) throw err
        if(typeXmlJson.type==='xml'){
            
            res.set('Content-type', 'text/xml')
            res.send(xml(results,true))
        }else{
            res.send(results)
        }
        
    })
    
})

app.listen(port,()=>{
    console.log(`Port ${port} `)
})