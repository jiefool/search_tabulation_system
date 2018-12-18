@extends('layouts.app')
@section('content')
  <table class="table" border=1>
    <thead>
      <tr>
        <td style="padding:0">
          <table class="table" style="padding:0;margin:0">
              <tr>
                <td>
                  <strong>
                    Candidates/Judges
                  </strong>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>
                    Categories
                  </strong>
                </td>
              </tr>
            </table>
        </td>
        @foreach($judges as $judge)
          <td style="padding:0">
            <table class="table" style="padding:0;margin:0">
              <tr>
                <td colspan="{{count($categories)}}">
                  <strong>
                    {{$judge->name}}</td>
                  </strong>
              </tr>
              <tr>
                @foreach($categories as $category)
                  <td style="min-width:{{100/count($categories)+1}}%;max-width:{{100/count($categories)+1}}%;width:{{100/count($categories)+1}}%">
                    <strong>
                      {{$category->name}} ({{$category->weight}}%)
                    </strong>
                  </td>
                @endforeach
              </tr>
            </table>
          </td>
        @endforeach
        <td style="padding:0">
          <table class="table" style="padding:0;margin:0">
            <tr>
              <td colspan="{{count($categories)}}">
                <strong>
                  Total
                </strong>
            </tr>
            <tr>
              <td style="min-width:{{100/count($categories)+1}}%;max-width:{{100/count($categories)+1}}%;width:{{100/count($categories)+2}}%">
                Candiddate #
              </td>
              @foreach($categories as $category)
                <td style="min-width:{{100/count($categories)+1}}%;max-width:{{100/count($categories)+1}}%;width:{{100/count($categories)+2}}%">
                  <strong>
                    {{$category->name}}
                  </strong>
                </td>
              @endforeach
              <td style="min-width:{{100/count($categories)+1}}%;max-width:{{100/count($categories)+1}}%;width:{{100/count($categories)+2}}%">
                <strong>
                  Overall Total
                </strong>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </thead>
    <tbody>
      @foreach($candidates as $candidate)
        <tr>
          <td>
            <strong>
              {{$candidate->candidate_number}}. {{$candidate->full_name()}}
            <strong>
          </td>
          @foreach($judges as $judge)
            <td style="padding:0">
              <table class="table" style="padding:0;margin:0;">
                <tr>
                  @foreach($categories as $category)
                  <td style="min-width:{{100/count($categories)+1}}%;max-width:{{100/count($categories)+1}}%;width:{{100/count($categories)+1}}%">
                    {{$cjc_score[$candidate->id][$judge->id][$category->id]}}
                  </td>
                  @endforeach
                </tr>
              </table>
            </td>
          @endforeach
          <td style="padding:0">
            <table class="table" style="padding:0;margin:0;">
                <tr>
                  <td style="min-width:{{100/count($categories)+1}}%;max-width:{{100/count($categories)+1}}%;width:{{100/count($categories)+2}}%">{{$candidate->candidate_number}}</td>
                  @foreach($categories as $category)
                  <td style="min-width:{{100/count($categories)+1}}%;max-width:{{100/count($categories)+1}}%;width:{{100/count($categories)+2}}%">
                    {{ $canditate_category_total[$candidate->id][$category->id] }}
                  </td>
                  @endforeach
                  <td style="min-width:{{100/count($categories)+1}}%;max-width:{{100/count($categories)+1}}%;width:{{100/count($categories)+2}}%">
                    <strong>
                      {{$cjc_total_average[$candidate->id]}}
                    </strong>
                  </td>
                </tr>
              </table>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection