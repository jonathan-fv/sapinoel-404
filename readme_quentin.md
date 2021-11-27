A faire
    Faire le lien des pages dans le header
    Lien panier depuis les articles
    Le responsive.

Le CSS
J'ai fait le tri des classes qui ne servait plus.

/* Section products */
.products{
    display: flex;
    justify-content: space-between;
    background-color: #eee;
}
.products .box{
    display: flex;
    justify-content: space-around;
    margin: 50px;
    width: 100%; 
    flex-wrap: wrap;
}
.products .box .product_sapin{
    display: flex;
    align-items: center;
    flex-direction: row;
    justify-content: space-around;
    border: var(--border);
    border-radius: 0.5rem;
    box-shadow: var(--box-shadow);
    margin: 1rem 0;
    width: 90%;
    background-color: #fff;
}
.products h5{
    font-size: 1.6rem;
    text-decoration: underline;
}
.products h3{
    font-size: 3rem;
    margin-bottom: 2rem;
}
.products h3 span{
    font-weight: 400;
    font-size: 2.4rem;
}
.products a{
    margin: 5%;
}
.products .price{
    font-size: 2rem;
    color : var(--black);
    padding: .5rem 0;
    text-align: center;
    width: 20%;
    color : var(--red);
    font-weight: 600;
}
.products .product_sapin img{
    margin: 2rem 0;
    width: 28%;
    height: auto;
}
.products .product_sapin:hover img{
    transform: scale(1.1);
}
.products .description{
    font-size: 1.4rem;
    text-align: justify;
    margin: 2rem 2rem 1rem 2rem;
    width: 40%;
    
}
.products .product_height{
    font-size: 1.4rem;
}