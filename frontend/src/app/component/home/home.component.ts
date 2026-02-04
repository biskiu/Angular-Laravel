import { Component } from '@angular/core';
import { firstValueFrom } from 'rxjs';
import { StudentsService } from '../../services/students.service';
import { TeachersService } from '../../services/teachers.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {
  food:string = "donut";
  students:any[] = [];
  teachers:any[] = [];

  constructor(
    private studentsService:StudentsService,
    private teachersService:TeachersService
  ){}

ngOnInit():void{
  this.FetchStudents();
  this.FetchTeachers();
}
  async FetchStudents(){
    this.students = await firstValueFrom(this.studentsService.Getlist());
    console.log(this.students)
  }
  async FetchTeachers(){
    this.teachers = await firstValueFrom(this.teachersService.Getlist());
    console.log(this.teachers)
  }


}
