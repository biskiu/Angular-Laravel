import { Component } from '@angular/core';
import { firstValueFrom } from 'rxjs';
import { StudentsService } from '../../services/students.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {
  food:string = "donut";
  students:any[] = [];
  constructor(
    private studentsService:StudentsService
  ){}

ngOnInit():void{
  this.FetchStudents();
}
  async FetchStudents(){
    this.students = await firstValueFrom(this.studentsService.Getlist());
    console.log(this.students)
  }



}
