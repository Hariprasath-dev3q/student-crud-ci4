<?php

namespace App\Models;

use CodeIgniter\Model;


class StudentFormModel extends Model
{
  protected $table = 'studentregisterationform';
  protected $allowedFields = ['rollNo', 'fname', 'lname', 'father_name', 'dob', 'mobile', 'email', 'password', 'gender', 'teacher_id', 'teacher_name', 'department', 'course' , 'file', 'city', 'address'];

  public function deleteItemById($id)
  {
    $result = $this->db->query("Delete from studentregisterationform where id = $id");
    return $result;
  }

  public function getItemsByTeacher($teacherName){
    return [
        'items' =>$this->like('teacher_name', $teacherName)
                ->paginate(4),
        'pager' => $this->pager,
    ];
  }

  public function getAllItems()
  {
    $perPage = 4;
    return [
      'items' => $this->orderBy('id', 'ASC')
        ->paginate($perPage, 'default'),
      'pager' => $this->pager,
    ];
  }

  public function getItemById($id)
  {
    $result = $this->db->query("Select * from studentregisterationform where id = $id");
    $result = $result->getRowArray();
    return $result;
  }

  public function updateItemById($id, $data)
  {
    $result = $this->db->table('studentregisterationform')
      ->where('id', $id)
      ->update($data);
  }

  public function insertItem($data)
  {
    $result = $this->db->table('studentregisterationform')
      ->insert($data);
    return $result;
  }

    public function getStudentCount($teacherId)
    {
      return $this->db->table('studentregisterationform')
      ->where('teacher_id', $teacherId)
      ->countAllResults();
    }

  public function genderCountById($teacherId){
    return $this->select("
        SUM(CASE WHEN gender = 'male' THEN 1 ELSE 0 END) as male_count,
        SUM(CASE WHEN gender = 'female' THEN 1 ELSE 0 END) as female_count
    ")
    ->where('teacher_id', $teacherId)
    ->first();
  }
}
