<?php 

namespace App\Repositories\Category;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryRepository implements CategoryInterface
{
  public function all()
  {
    $data = Category::latest('id')->get();
    return $data;
  }

  public function allPaginate($perPage)
  {
    $data = Category::latest('id')->paginate($perPage);
    return $data;
  }

  public function store($request_data)
  {
    $data = Category::create([
      'name' => $request_data->name,
      'slug' => Str::slug($request_data->name),
      'code' => $request_data->code,
    ]);
    return $this->show($data->id);
  }

  public function show($id)
  {
    return $data = Category::findOrFail($id);
  }

  public function update($request_data, $id)
  {
    $data = $this->show($id);
    $data->update([
      'name' => $request_data->name,
      'slug' => Str::slug($request_data->name),
      'code' => $request_data->code,
    ]);

    return $data;
  }

  public function delete($id)
  {
    $data = $this->show($id);
    $data->delete();
    return $data;
  }

  public function status($id)
  {
    $data = $this->show($id);
    if($data->is_active == 1) {
      $data->is_active = 0;
    }
    elseif ($data->is_active == 0) {
      $data->is_active = 1;
    }
    $data->update();
    return $data;
  }
 

}
