import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { environments } from '../environments/environment.development';

@Injectable({
  providedIn: 'root'
})
export class TeachersService {
  url:string = environments.apiUrl;
  constructor(
    private http:HttpClient
  ) { }

  Getlist():Observable<any>{
    return this.http.get<any>(this.url+'teacher/get')
  }
}
