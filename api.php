<?php
    require_once("./functions/dbconnect.php");

    header('Content-type: application/json');
    
    if(empty($pdo))
    {
        http_response_code(500);
        echo json_encode([
            'message' => 'La base de donnés n\' pas créée.' 
        ]);
        die;
    }

    if (empty($_SERVER['PATH_INFO'])) 
    { 
        http_response_code(400); 
        echo json_encode([
            'message' => 'Pas de endpoints defini',
        ]);
        die;
    }
    
    if ($_SERVER['PATH_INFO'] === "/product") 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        { 
            if (!empty($_POST['product_name']) && !empty($_POST['product_desc']) && !empty($_POST['product_price']) && !empty($_POST['product_img']) && !empty($_POST['height']) && !empty($_POST['category'])) 
            { 
                $statement = $db->prepare('INSERT INTO `product` (product_name, product_desc, product_price, product_img, height, category) VALUE (:name, :description, :prix, :image, :taille, :category)');
                $statement->execute([
                    'name' => $_POST['product_name'],
                    'description' => $_POST['product_desc'],
                    'prix' => $_POST['product_price'],
                    'image' => $_POST['product_img'],
                    'taille' => $_POST['height'],
                    'categorie' => $_POST['category'],
                ]); 
                http_response_code(201); 
    
                $statement = $pdo->prepare('SELECT * FROM `product` WHERE id = :id');
                $statement->execute([
                    'id' => $pdo->lastInsertId()
                ]);
                $product = $statement->fetch(PDO::FETCH_ASSOC);
                echo json_encode($product);
            } 
            else 
            {
                http_response_code(400); 
                echo json_encode([
                    'message' => 'Vous devez définir le nom, la description, le prix, l\'image, la taille et la race',
                ]);
            }
        } else if ($_SERVER['REQUEST_METHOD'] === 'GET') 
        { 
            $statement = $pdo->prepare('SELECT * FROM `product`');
            $statement->execute();
            $product = $statement->fetchAll(PDO::FETCH_OBJ);
    
            echo json_encode($product); 
        } 
        else {
            http_response_code(405);
        }
    } 
    else if (preg_match_all('/\/product\/([0-9]+)/m', $_SERVER['PATH_INFO'], $matches, PREG_SET_ORDER, 0)) 
    { 
        $statement = $pdo->prepare('SELECT * FROM `product` WHERE id = :id');
        $statement->execute([
            'id' => $matches[0][1],
        ]);
        $product = $statement->fetch(PDO::FETCH_ASSOC);
    
        if ($product) 
        {
            echo json_encode([
                'id' => $product['id'],
                'name' => $product['product_name'],
                'description' => $product['product_desc'],
                'prix' => $product['product_price'],
                'image' => $product['product_img'],
                'taille' => $product['height'],
                'categorie' => $product['category'],
            ]); 
        } 
        else {
            http_response_code(404); 
            echo json_encode([
                'message' => 'id du produit introuvable',
            ]);
        }
    } 
    else {
        http_response_code(404); 
    
        echo json_encode([
            'message' => 'endpoints non utilisable',
        ]);
    }
    