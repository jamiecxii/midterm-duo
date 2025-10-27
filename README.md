# 🧾 **Inventory Management System**

## **Description / Overview**
The **Inventory Management System** aims to streamline the process of managing products, categories, and transactions 
in an organized and efficient manner. It provides essential functions for maintaining accurate inventory records and
generating detailed reports for monitoring stock and transaction activities. 
The system serves as a practical tool for ensuring proper inventory tracking and data consistency.

---

## **Objectives**
- To develop a functional inventory management system.  
- To implement CRUD operations for products, categories, and transactions.  
- To allow the generation of reports for accurate inventory tracking.  
- To provide an organized and efficient data management process.  
- To apply logical database and programming concepts in system development.  

---

## **Features / Functionality**
- 🛒 **Product Management:** Add, edit, delete, and view product information.  
- 📂 **Category Management:** Create and manage different product categories.  
- 💰 **Transaction Module:** Record and track stock movements or sales.  
- 📊 **Reports:** Generate summaries of transactions and current stock.  
- 🔍 **Search & Filter:** Quickly locate products or transactions.  
- 🧩 **CRUD Operations:** Complete control for adding, updating, and removing data.  

---

## **Installation Instructions**
1. Clone the repository to your local environment.  
2. Set up the database connection and import the provided database file (if applicable).  
3. Run the project in your local development environment.  
4. Access the system through your browser using the provided local link.  

---

## **Usage**
1. Open the system in your browser.  
2. Add products and organize them into categories.  
3. Record transactions to update stock levels.  
4. View generated reports to monitor inventory and sales.  

---

## **Screenshots or Code Snippets**
**Example: Adding a Product**
 ```
@extends('layouts.app')
@section('page_title', 'Products Inventory')
@section('content')
    <div class="container py-4">
        <div class="form-card shadow-lg p-4">
            <h2 class="fw-bold text-success mb-4">➕ Add New Product</h2>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold">Product Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter product name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Quantity</label>
                    <input type="number" name="quantity" class="form-control" placeholder="Enter quantity" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" placeholder="Enter price" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Category</label>
                    <select name="category_id" class="form-select" required>
                        <option value="">-- Select Category --</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary px-4">Cancel</a>
                    <button type="submit" class="btn btn-success px-4">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
 ```
---

**This feature allow users to add product**
![Add Product](https://github.com/jamiecxii/midterm-duo/blob/main/inventory-system/public/Add%20product.jpg)
**This feature allow users to add category**
![Add Category](https://github.com/jamiecxii/midterm-duo/blob/main/inventory-system/public/add%20category.jpg)
**This feature allow users to add transaction**
![Add Transaction](https://github.com/jamiecxii/midterm-duo/blob/main/inventory-system/public/Add%20Transactions.jpg)
**This feature allow users view reports**
![Reports](https://github.com/jamiecxii/midterm-duo/blob/main/inventory-system/public/reports.jpfg)

---

## **Contributors**
**👤 Lovina Jamee C. Visaya**  
**👤 John Carlo C. Songcuan**

---

## **License**
This project is created for **academic and educational purposes only**.  
Unauthorized copying, modification, or distribution of this project is prohibited.







    

