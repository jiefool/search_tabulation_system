@extends('layouts.app')
@section('content')
  <table class="table" border=1>
    <thead>
      <tr>
        <td style="padding:0">
          <table class="table" style="padding:0;margin:0">
              <tr>
                <td>Candidates/Judges</td>
              </tr>
              <tr>
                <td>
                  Categories
                </td>
              </tr>
            </table>
        </td>
        @foreach($judges as $judge)
          <td style="padding:0">
            <table class="table" style="padding:0;margin:0">
              <tr>
                <td colspan="{{count($categories)}}">{{$judge->name}}</td>
              </tr>
              <tr>
                @foreach($categories as $category)
                  <td>
                    {{$category->name}}
                  </td>
                @endforeach
                <td>
                  Total Average
                </td>
              </tr>
            </table>
          </td>
        @endforeach
        <td>Grand Total Average</td>
      </tr>
    </thead>
    <tbody>
      @foreach($candidates as $candidate)
        <tr>
          <td>{{$candidate->full_name()}}</td>
          @foreach($judges as $judge)
            <td style="padding:0">
              <table class="table" style="padding:0;margin:0">
                <tr>
                  @foreach($categories as $category)
                  <td>
                    {{$cjc_score[$candidate->id][$judge->id][$category->id]}}
                  </td>
                  @endforeach
                  <td>
                    <strong>
                      {{$cjc_total[$candidate->id][$judge->id]}}
                    </strong>
                  </td>
                </tr>
              </table>
            </td>
          @endforeach
          <td>
            <strong>
              {{$cjc_total_average[$candidate->id]}}
            </strong>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection