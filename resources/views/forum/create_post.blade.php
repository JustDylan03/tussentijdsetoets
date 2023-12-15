

<!DOCTYPE html>
<html>
<head>
    <!-- Head-sectie -->
</head>
<body>
    <div class="container">
        <h1>Create a New Post</h1>

        <form action="{{ route('forum.storePost') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" id="content" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
    </body>
</html>
