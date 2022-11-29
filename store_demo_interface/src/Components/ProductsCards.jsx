import React from 'react'
import { useEffect, useState } from 'react'
import axios from 'axios';
import Card from 'react-bootstrap/Card';
// import ListGroup from '';
function ProductsCards() {
    const [Products, setProducts] = useState([]);
//   Api link for data from laravel api controller named Products
    const apiUrl =
    "http://127.0.0.1:8000/api/products";
useEffect(() => {
    getProducts();
}, [])

    const getProducts = () => {
        axios.get(apiUrl) 
            .then((response) => {
                const products = response.data.products;
                setProducts(products);
                
            })
            .catch((error) => console.log(error))
    }
    console.log(Products);
   
    return (
        <div className='container pt-4'>
            <div className='row'>
                
            
            {Products.map((value) => {
                return (
                    <div className="col-3">
                    <Card key={value.id} style={{ width: '18rem' }}>
                        <Card.Body>
                            <Card.Title>{ value.name}</Card.Title>
                            <Card.Text>
                           <span>Description</span> {value.description}
                            </Card.Text>
                            <Card.Text>
                            <span>Price:</span>{value.price}
                            </Card.Text>
                        </Card.Body>
                        <Card.Body>
                            <Card.Link href="#">Add to cart</Card.Link>
                        </Card.Body>
                    </Card>
                    </div>
                )
            })}
                </div>
                
            </div>
    )
}

export default ProductsCards