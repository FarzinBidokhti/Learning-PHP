<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Product Card</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        body {
            background: #0f172a;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 24px;
        }

        .product-card {
            width: 100%;
            max-width: 320px;
            background: #020617;
            border: 1px solid #1e293b;
            border-radius: 16px;
            overflow: hidden;
            color: #e5e7eb;
            display: flex;
            flex-direction: column;
        }

        .product-image {
            width: 100%;
            aspect-ratio: 4 / 3;
            overflow: hidden;
            background: #020617;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.25s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.04);
        }

        .product-content {
            padding: 14px 16px 16px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .product-badge {
            display: inline-flex;
            align-items: center;
            padding: 2px 8px;
            border-radius: 999px;
            font-size: 11px;
            background: rgba(74, 222, 128, 0.1);
            color: #4ade80;
            border: 1px solid rgba(74, 222, 128, 0.3);
            width: fit-content;
        }

        .product-title {
            font-size: 16px;
            font-weight: 600;
            color: #f9fafb;
        }

        .product-desc {
            font-size: 13px;
            color: #9ca3af;
            line-height: 1.5;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 13px;
            color: #eab308;
            margin-top: 2px;
        }

        .product-rating span.count {
            color: #9ca3af;
            font-size: 12px;
            margin-left: 4px;
        }

        .product-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 10px;
        }

        .product-price {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .price-current {
            font-size: 18px;
            font-weight: 700;
            color: #facc15;
        }

        .price-old {
            font-size: 12px;
            color: #6b7280;
            text-decoration: line-through;
        }

        .product-button {
            border: none;
            padding: 8px 14px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 500;
            background: #38bdf8;
            color: #020617;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: background 0.15s ease, transform 0.1s ease;
            white-space: nowrap;
        }

        .product-button:hover {
            background: #0ea5e9;
            transform: translateY(-1px);
        }

        .product-button:active {
            transform: translateY(0);
        }
    </style>
</head>

<body>

    <article class="product-card">
        <div class="product-image">
            <img src="https://images.pexels.com/photos/845434/pexels-photo-845434.jpeg" alt="Product Image">
        </div>

        <div class="product-content">
            <span class="product-badge">New · 20% OFF</span>

            <h2 class="product-title">Wireless Noise Cancelling Headphones</h2>

            <p class="product-desc">
                High-quality sound, 30h battery life, Bluetooth 5.2, and soft ear cushions for all-day comfort.
            </p>

            <div class="product-rating">
                ⭐⭐⭐⭐⭐
                <span class="count">(128 reviews)</span>
            </div>

            <div class="product-footer">
                <div class="product-price">
                    <span class="price-current">$129.00</span>
                    <span class="price-old">$159.00</span>
                </div>

                <button class="product-button" type="button">
                    Add to cart
                    <span>🛒</span>
                </button>
            </div>
        </div>
    </article>

</body>

</html>