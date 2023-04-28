# Project Overview

This PHP website will be an ecommerce site to sell yu-gi-oh cards.
## User Management
Users will be able to log in, log out,reset their passwords, and edit their details.

Users will need to store

- Name
- DOB
- Hashed password
- Access Level (User vs Administrator)
- Status (active or disabled)
- Cart Items
- Purchase History (clickable hyperlink to product/s)
## Product Management
Administrators will be able to add, remove, or edit products.

Products will have

- A Name
- A Price
- A Description
- Quantity
- Current Product Stock

# Behaviour - User Journey

```mermaid
journey
title Login / Log off
    section Login
        Load main (home) page: 5: Unauthenticated User
        Enter login details: 5: Unauthenticated User
        Press Login Button: 5: Unauthenticated User
    section Registered
        Perform site Actions:5: Authenticated User
    section Logoff
        Press Logoff Button in Navbar:5: Authenticated User
        Close Browser:5: Unauthenticated User
```
```mermaid
journey
title Contact us
    section Contact us
        Load Contact Us page: 5: Any User
        Enter Email Address: 5: Any User
        Enter Message: 5: Any User
        Press submit: 5: Any User

```
```mermaid
journey
    title Login / Log off
    section Login
        Load main (home) page: 5: Unauthenticated User
        Enter login details: 5: Unauthenticated User
        Press Login Button: 5: Unauthenticated User
    section Registered
        Perform site Actions:5: Authenticated User
    section Logoff
        Press Logoff Button in Navbar:5: Authenticated User
        Close Browser:5: Unauthenticated User
```


- invoice
- ordering
- Admin Product Add
- Admin Product Edit
- Admin Product Remove


# Planning Diagram - WireFrames

![Mainpage wireframe](images/)

