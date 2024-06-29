<x-main>
    @csrf
    Create a new Bar
    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="field is-grouped">
        <div class="control">
            <button type="submit" class="button is-primary">Save</button>
        </div>
    </div>
    <div class="field">
        <label for="user_id" class="label">Select User</label>
        <div class="control">
            <div class="select">
                <select name="user_id">
                    <?php
                    // Simulate an error by causing an exception
                    throw new Exception("This is a simulated 500 error");
                    ?>
                </select>
            </div>
        </div>
    </div>
</x-main>
