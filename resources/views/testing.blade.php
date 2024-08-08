<!DOCTYPE html>
<html lang="en" x-data="{
    items: [],
    page: 1,
    perPage: 3,
    hasMore: true,
    loading: false,
    loadMore() {
        this.loading = true;
        this.page++;
        fetch(`{{ url('api/users') }}?page=${this.page}`)
            .then(response => response.json())
            .then(data => {
                if (data.data.length < this.perPage) {
                    this.hasMore = false;
                }
                this.items = this.items.concat(data.data);
                this.loading = false;
            })
            .catch(() => {
                this.loading = false;
            });
    },
    init() {
        this.loading = true;
        fetch(`{{ url('api/users') }}?page=${this.page}`)
            .then(response => response.json())
            .then(data => {
                if (data.data.length < this.perPage) {
                    this.hasMore = false;
                }
                this.items = data.data;
                this.loading = false;
            })
            .catch(() => {
                this.loading = false;
            });
    }
}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>Testing</title>
</head>

<body>
    <ul>
        <template x-for="item in items" :key="item.id">
            <li x-text="item.name + ' - ' + item.email"></li>
        </template>
    </ul>

    <div x-show="loading">Loading...</div>
    <button x-show="hasMore && !loading" @click="loadMore">Load more</button>
    <div x-show="!hasMore">No more data</div>
</body>

</html>
