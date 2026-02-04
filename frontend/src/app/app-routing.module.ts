import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './component/home/home.component';
import { StudentsComponent } from './component/students/students.component';
import { SubjectsComponent } from './component/students/subjects/subjects.component';
import { GradesComponent } from './component/grades/grades.component';

const routes: Routes = [
  {
    path:'home',
    component: HomeComponent
  },
  {
    path:'grades',
    component:GradesComponent
  },
  {
    path:'students',
    component: StudentsComponent,
    children:[
      {
        path: 'subjects',
        component: SubjectsComponent
      }
    ]
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
