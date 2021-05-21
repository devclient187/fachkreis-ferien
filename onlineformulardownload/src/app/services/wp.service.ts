import { Injectable } from '@angular/core';
import { HttpClient } from "@angular/common/http";
import { WPPost } from '../models/WPPost';
import { of } from 'rxjs';
import { environment } from '../../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class WPService {

  constructor(private http: HttpClient) {}

  getPosts() {
    if (environment.enableTestData === true) {
      return of([{
        id: "test1",
        title: { rendered: "Test 1" },
        date: "2021-05-07T12:23:17",
        modified: "2021-05-07T12:23:17"
      }, {
        id: "test2",
        title: { rendered: "Test 2" },
        date: "2021-05-07T12:23:17",
        modified: "2021-05-07T12:23:17"
      }, {
        id: "test3",
        title: { rendered: "Test 3" },
        date: "2021-05-07T12:23:17",
        modified: "2021-05-07T12:23:17"
      }])
    }
    return this.http.get<WPPost[]>('/wp-json/wp/v2/posts')
  }
}
