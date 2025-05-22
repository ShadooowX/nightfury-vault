<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIIS_CTF Upload Challenge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to bottom, #1a202c, #2d3748);
            min-height: 100vh;
            color: #e2e8f0;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }
        .challenge {
            background: #2d3748;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }
        .btn {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="mb-6">
            <h1 class="text-4xl font-bold text-blue-400">KIIS_CTF Upload Challenge</h1>
        </div>

        <div class="challenge">
            <h2 class="text-2xl font-semibold mb-4">Challenge Description</h2>
            <p class="mb-4">Your mission is to bypass the file upload restrictions and escalate privileges to find the <code class="bg-gray-700 px-1 rounded">flag.txt</code> file located in a restricted directory (e.g., <code class="bg-gray-700 px-1 rounded">/***t/flag.txt</code>).</p>
            <p class="mb-4 text-blue-300 font-bold">Can you become root and capture the flag?</p>
            <p class="font-semibold mb-2">Steps:</p>
            <ol class="list-decimal list-inside space-y-2">
                <li><strong>Upload Bypass</strong>: Find a way to upload a file despite the restrictions.</li>
                <li><strong>Shell Upload</strong>: Use the uploaded file to execute commands on the server.</li>
                <li><strong>Privilege Escalation</strong>: Escalate your privileges to access the <code class="bg-gray-700 px-1 rounded">flag.txt</code> file.</li>
                            <li><strong>Note</strong>: No automated tools,brute force,dictionary attack.total manual base testing.</li>
            </ol>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file" accept=".jpg,.png">
                <button type="submit" class="btn bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 mt-4">Upload</button>
            </form>
        </div>
    </div>
</body>
</html>
