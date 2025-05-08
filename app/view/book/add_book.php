<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <div class="flex">
        <div class="w-64 border-r border-gray-200 bg-white">
            <?php include_once "components/sitebar.php"; ?>
        </div>
        <div class="flex-1 px-6 py-6 overflow-auto bg-gray-50">
            <h2 class="text-2xl font-semibold mb-4">Add New Book</h2>
            <form action="/addbook" method="POST" >
            <label>Title:</label><input type="text" name="title"><br>
            <label>Author:</label><input type="text" name="author"><br>
            <label>Description:</label><input type="text" name="description"><br>
            <label>Book Image:</label><input type="text" name="book_img"><br>
            <label>Published Date:</label><input type="date" name="published_date"><br>
            <label>Created At:</label><input type="date" name="create_at"><br>
            <label>Category ID:</label><input type="text" name="category_id"><br>
            <input type="submit" value="Add Book">
            </form>
        </div>
    </div>
</body>
</html>