                    <!-- @foreach ($articles as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->views }}x</td>

                            @if ($item->status == 0)
                            <td>
                                <span class="badge bg-danger">Private</span>
                            </td>
                            @else
                            <td>
                                <span class="badge bg-success">Published</span>
                            </td>
                            @endif

                            <td>{{ $item->publish_date }}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-secondary">Detail</a>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach -->
