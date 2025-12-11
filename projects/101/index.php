<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <title>Twitter Style Card</title>
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
      padding: 24px;
    }

    .tweet {
      width: 100%;
      max-width: 600px;
      background: #020617;
      border: 1px solid #1e293b;
      border-radius: 16px;
      padding: 12px 16px;
      color: #e5e7eb;
    }

    .tweet-header {
      display: flex;
      gap: 12px;
      align-items: center;
      margin-bottom: 8px;
    }

    .tweet-avatar {
      width: 44px;
      height: 44px;
      border-radius: 999px;
      background: linear-gradient(135deg, #38bdf8, #a855f7);
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      color: white;
      flex-shrink: 0;
    }

    .tweet-user {
      display: flex;
      flex-direction: column;
      gap: 1px;
    }

    .tweet-name-row {
      display: flex;
      align-items: center;
      gap: 4px;
      font-size: 14px;
    }

    .tweet-name {
      font-weight: 600;
      color: #f9fafb;
    }

    .tweet-verified {
      font-size: 14px;
    }

    .tweet-handle-time {
      font-size: 13px;
      color: #9ca3af;
    }

    .tweet-body {
      font-size: 15px;
      line-height: 1.7;
      margin-bottom: 10px;
      color: #e5e7eb;
    }

    .tweet-image {
      overflow: hidden;
      border-radius: 16px;
      margin-bottom: 10px;
      border: 1px solid #1e293b;
    }

    .tweet-image img {
      display: block;
      width: 100%;
      height: auto;
    }

    .tweet-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 4px;
      font-size: 13px;
      color: #9ca3af;
    }

    .tweet-actions {
      display: flex;
      gap: 20px;
      align-items: center;
    }

    .tweet-action {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      cursor: pointer;
      color: #94a3b8;
      transition: color 0.15s ease, transform 0.1s ease;
    }

    .tweet-action:hover {
      color: #e5e7eb;
      transform: translateY(-1px);
    }

    .tweet-action svg {
      width: 20px;
      height: 20px;
    }

    @media (max-width: 480px) {
      .tweet {
        border-radius: 0;
        border-left: none;
        border-right: none;
      }
    }
  </style>
</head>
<body>

  <!-- Tweet Card -->
  <article class="tweet">
    
    <!-- Header -->
    <header class="tweet-header">
      <div class="tweet-avatar">F</div>

      <div class="tweet-user">
        <div class="tweet-name-row">
          <span class="tweet-name">Farzin Dev</span>
          <span class="tweet-verified">✔️</span>
        </div>
        <div class="tweet-handle-time">@farzin · 2h ago</div>
      </div>
    </header>

    <!-- Body -->
    <div class="tweet-body">
      This is a Twitter-like card fully created using HTML & CSS.
      You can easily change the image, text, like count, and comment count.
    </div>

    <!-- Image -->
    <div class="tweet-image">
      <img src="https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg" alt="Tweet Image">
    </div>

    <!-- Footer -->
    <footer class="tweet-footer">

      <div class="tweet-actions">

        <!-- Comment -->
        <button class="tweet-action" type="button">
          <svg viewBox="0 0 24 24" fill="none">
            <path d="M3 12C3 7.58 7.03 4 12 4s9 3.58 9 8-4.03 8-9 8c-1.31 0-2.56-.23-3.68-.66L4 21l1.02-3.07C3.97 16.51 3 14.35 3 12Z"
             stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <span>32</span>
        </button>

        <!-- Like -->
        <button class="tweet-action" type="button">
          <svg viewBox="0 0 24 24" fill="none">
            <path d="M12.62 20.84c-.34.11-.9.11-1.24 0C7.62 19.55 2 15.27 2 9.5 2 6.42 4.42 4 7.5 4c1.74 0 3.41.81 4.5 2.09A6.315 6.315 0 0 1 16.5 4C19.58 4 22 6.42 22 9.5c0 5.77-5.62 10.05-9.38 11.34Z"
             stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <span>189</span>
        </button>

      </div>

      <div class="tweet-stats">12.5K views</div>

    </footer>

  </article>

</body>
</html>
