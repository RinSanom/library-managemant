<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Book List</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="flex h-screen">
    <div class="w-64 border-r border-gray-200 bg-white">
       <?php include_once "components/sitebar.php"; ?>
    </div>
    <div class="flex-1 px-6 py-6 overflow-auto bg-gray-50">
      <div>
      <div class="bg-gradient-to-b from-black to-gray-800 text-bg-black p-6 rounded-3xl w-64 shadow-lg flex justify-between items-start">
  <div>
    <p class="text-sm text-black">All Of Books </p>
    <p class="text-3xl font-bold mt-1"><?php $cout ?> </p>
  </div>
  <div class="flex flex-col items-center">
    <div class="w-8 h-8 flex items-center justify-center bg-gray-900 rounded-full border border-gray-700">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12l5 5L20 7" />
      </svg>
    </div>
    <p class="text-green-400 text-sm mt-1">+6.08%</p>
  </div>
</div>
      </div>
    <div>
      <h2 class="text-2xl font-semibold mb-4  ">Book List</h2>
      <table class="w-full border-collapse bg-white shadow rounded">
        <thead class="bg-blue-100">
          <tr class="bg-blue-200 text-left">
            <th class="border p-3">ID</th>
            <th class="border p-3">Title</th>
            <th class="border p-3">Description</th>
            <th class="border p-3">Author</th>
            <th class="border p-3">Type</th>
            <th class="border p-3">Book Image</th>

              </tr>
            </thead>    
           <tbody>
          <?php if (isset($bookList) && !empty($bookList)): ?>
            <?php foreach ($bookList as $book): ?>
              <tr class="hover:bg-gray-100">
                <td class="border p-3"><?php echo htmlspecialchars($book['id']); ?></td>
                <td class="border p-3"><?php echo htmlspecialchars($book['title']); ?></td>
                <td class="border p-3 w-[300px]"><?php echo htmlspecialchars($book['description']); ?></td>
                <td class="border p-3"><?php echo htmlspecialchars($book['author']); ?></td>
                <td class="border p-3"><?php echo htmlspecialchars($book['book_type']); ?></td>
                <td class="border p-3"><img src="<?php echo htmlspecialchars($book['book_img']) ?>" alt="Book Image" class="w-16 h-16"></td>
                <td class="border p-3"><a href="/editbook?id=<?php echo htmlspecialchars($book['id']); ?>" class="text-blue-500 hover:underline">Edit</a></td>
                <td class="border p-3"><a href="/deletebook?id=<?php echo htmlspecialchars($book['id']); ?>" class="text-red-500 hover:underline">Delete</a></td>
              </tr>
               <?php endforeach; ?>
              <?php else: ?>
            <tr>
              <td colspan="4" class="border p-3 text-center text-gray-500">No books found.</td>
            </tr>
            <?php endif; ?>
           </tbody>
         </table>
        </div>
      </div>
  </div>
</body>
</html>
