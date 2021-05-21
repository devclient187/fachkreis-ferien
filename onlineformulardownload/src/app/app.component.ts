import { Component, OnInit } from '@angular/core';
import { Observable } from 'rxjs';
import { WPPost } from './models/WPPost';
import { WPService } from './services/wp.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title = 'onlineformulardownload';
  displayedColumns: string[] = ['title', 'date', 'modified'];
  posts$: Observable<WPPost[]>;
  
  constructor(private wpservice: WPService) {
  }

  ngOnInit(): void {
    this.posts$ = this.wpservice.getPosts()
  }
}
